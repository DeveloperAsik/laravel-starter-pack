<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    var ViewJS = function () {
        return {
            //main function to initiate the module
            init: function () {
                fnAlertStr('ViewJS successfully load', 'success', {timeOut: 2000});
                var table = $('#users').DataTable({
                    "sPaginationType": "bootstrap",
                    "paging": true,
                    "pagingType": "full_numbers",
                    "pageLength": 10,
                    "ordering": false,
                    "serverSide": true,
                    "cache": false,
                    "processing": true,
                    "lengthChange": true,
                    "language": {
                        processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
                    },
                    "ajax": {
                        url: _base_extraweb_uri + '/ajax/post/get-group-permission-list',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST'
                    },
                    "columns": [
                        {"data": "id"},
                        {"data": "url"},
                        {"data": "route_name"},
                        {"data": "class"},
                        {"data": "method"},
                        {"data": "group_id"},
                        {"data": "group_name"},
                        {"data": "is_public"},
                        {"data": "is_allowed"},
                        {"data": "is_active"},
                        {"data": "action"}
                    ]
                });
            }
        };
    }();
    jQuery(document).ready(function () {
        ViewJS.init();
    });
</script>
