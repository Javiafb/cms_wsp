<?php require_once 'content/header.php'; ?>

<!-- grups Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">

        <!-- inicio -->
        <?php

        $principal = new controller_grup();
        $principal->grupos();

        ?>

    </div>
</div>
<!-- grups End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->


<?php require_once 'content/footer.php'; ?>