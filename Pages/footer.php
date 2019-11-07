<script src="<?= $url ?>assets/js/popper.min.js"></script>
<script src="<?= $url ?>assets/js/bootstrap.js"></script>
<script src="<?= $url ?>assets/js/jasny-bootstrap.min.js"></script>
<script src="<?= $url ?>assets/js/adminlte.min.js"></script>

<script>
    $("input").on("keyup", function(e) {
        var oldvalue = this.value;
        var validtoregex = false;
        this.classList.forEach(el => {
            if (el == "stringonly" && isFinite(e.key)) {
                validtoregex = true;
            }
        })

        if (oldvalue.length > 0)
            if (validtoregex == true) {
                var newValue = oldvalue.replace(new RegExp("[0-9]", "g"), "");
                this.value = newValue;
            }
    });

</script>