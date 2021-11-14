$(document).ready(function() {
            getCompanyData();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Get all Company Data
            function getCompanyData() {
                $.ajax({
                    type: 'GET',
                    url: 'root_url',
                    data: {}
                }).done(function(data) {
                    table_data_row(data.data)
                });
            }

            // company table row
            function table_data_row(data) {

                var rows = '';

                $.each(data, function(key, value) {
                        rows = rows + '<tr>';
                        rows = rows + '<td>' + value.name + '</td>';
                        rows = rows + '<td>' + value.email + '</td>';
                        rows = rows + '<td>' + value.phone + '</td>';
                        rows = rows + '<td>' + value.address + '</td>';
                        rows = rows + '<td data-id="' + value.id + '">';
                        rows = rows + '<a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="editCompany" data-id="' + value.id + '" data-toggle="modal" data-target="#modal-id">Edit</a>';
                        rows = rows + '<a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="deleteCompany" data-id="' + value.id + '" >Delete</a> ';
                        rows = rows + '</td>';
                        rows = rows + '</tr>';
                    )
                };

                $("tbody").html(rows);

            });