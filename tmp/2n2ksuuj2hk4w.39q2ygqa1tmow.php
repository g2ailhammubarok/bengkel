<script>

    $(document).ready(function () {
        var table = $('#customer_table').DataTable({
            "scrollX": false,
            "ordering": false,
            "scrollCollapse": true,
            "processing": true,
            "serverSide": true,
            "lengthChange": false,
            "searching": true,
            "ajax": {
                "url": "<?= ($BASE.'/customer/data') ?>",
                "type": "POST"
            },
            "columns": [
                { data: 0 }, { data: 1 }, { data: 2 }, { data: 3 }, { data: 4 }, { data: 5 }, { data: 6 }, { data: 7 }, { data: 8 }, { data: 9 },
                {
                    "render": function (data, type) {
                        return '<a href="<?= ($BASE."/customer/update/' + data + '") ?>" class="badge badge-info p-1" title="Perbarui Data"><i class="fa fa-pen"></i></>';
                    }
                }
            ]
        });

        $('#customer_search').on('keyup', function () {
            table.search(this.value).draw();
        });
    });
</script>