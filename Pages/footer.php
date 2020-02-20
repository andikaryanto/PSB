<script src="<?= $url ?>assets/js/popper.min.js"></script>
<script src="<?= $url ?>assets/js/bootstrap.js"></script>
<!--<script src="/assets/js/jasny-bootstrap.min.js"></script>-->
<script src="<?= $url ?>assets/js/adminlte.min.js"></script>
<script src="<?= $url ?>assets/js/jquery.mask.js"></script>

<script>
    $('.grade').mask('099,0', {
        reverse: true
    });
    
  
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

    $(".numbered").on("keyup", function(e) {
        $("#"+this.id).val(this.value.match(/[0-9]*/));
    });
</script>