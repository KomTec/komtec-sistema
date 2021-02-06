<?php if (!$this->router->fetch_class() == 'login'): ?>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Sistema KomTec <?php echo date('Y'); ?>&nbsp | By Roberson Santos</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

<?php endif; ?>


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade text-center" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><strong>Deseja sair do sistema?</strong></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><h5>Selecione Sair para encerrar a Sessão.</h5></div>
            <div class="modal-footer">
                <button class="btn btn btn-outline-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn btn-outline-primary" href="<?php echo base_url('login/logout') ?>">Sair</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('public/js/sb-admin-2.min.js'); ?>"></script>

<script src="<?php echo base_url('public/js/util.js'); ?>"></script>

<?php if (isset($scripts)): ?>

    <?php foreach ($scripts as $script): ?>

        <!-- Custom scripts for this module-->
        <script src="<?php echo base_url('public/' . $script); ?>"></script>

    <?php endforeach; ?>

<?php endif; ?>

<script>
      $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
              </script
          
          </body>

      </html>
      