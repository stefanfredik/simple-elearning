<!-- <script src="https://unpkg.com/vue-router"></script> -->

<script>
    // import 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js';
    const app = {
        data() {
            return {
                tes: '',
                <?php $this->renderSection("vData") ?>
            }
        },
        methods: {
            async edit(url, id) {
                // const res = await axios.get(url + id);
                // console.log(res.data);

                // var editModal = document.getElementById('editModal')
                // var modal = new bootstrap.Modal(editModal);
                // modal.show();

                window.location = url + id;

            },

            hapus(url) {
                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = url;
                    }
                })
            },

            <?php $this->renderSection("vMethod") ?>
        },
        mounted: function() {
            if (document.getElementById("editModal")) {
                var editModal = document.getElementById('editModal')
                var modal = new bootstrap.Modal(editModal);
                modal.show();
            }
        }

    };


    Vue.createApp(app).mount('#layoutSidenav');
</script>



<script src="<?= base_url(); ?>/sb/js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="<?= base_url(); ?>/sb/js/datatables-simple-demo.js"></script> -->

<!-- Session Flash Data Parse -->
<?php

if ($notif = $this->session->getFlashdata('pesan')) { ?>
    <script>
        Swal.fire(
            '<?= $notif['judul'] ?>',
            '<?= $notif['pesan'] ?>',
            '<?= $notif['type'] ?>'
        )
    </script>
<?php } ?>


<?= $this->renderSection("script"); ?>