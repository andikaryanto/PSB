<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; Panitia PSB MUSATI 2019</strong>. All rights reserved.
</footer>

<script>
<?php if(isset($_SESSION['alert'])):?>
    console.log("<?= $_SESSION['alert']?>");
    alert("<?= $_SESSION['alert']?>")
<?php 
    unset($_SESSION['alert']);
endif;?>
</script>

</div><!-- ./wrapper -->

</body>

</html>