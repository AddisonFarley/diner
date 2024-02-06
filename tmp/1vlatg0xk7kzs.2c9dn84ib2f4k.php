<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<body>
<div class="container">
    <h1>The Diner:  Order Form</h1>

    <form action="#" method="post" class="form-horizontal">

        <!-- get food -->
        <div class="form-group">
            <label for="food" class="col-sm-4 control-label">What food would you like to order?</label>

            <div class="col-sm-4">
                <input class="form-control" type="text" name="food" id="food" value="">

                <!-- Display an error if there is one -->
            </div>
        </div>
        <br>

        <!-- get meal -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Select a meal</label>
            <div class="col-sm-4">
                <p>You chose </p>

                <?php foreach (($meals?:[]) as $meal): ?>
                    <label>
                        <input type="radio"
                               name="meal"
                               id="<?= ($meal) ?>"
                               value="<?= ($meal) ?>"
                        > <?= (ucwords($meal))."
" ?>
                        </input>
                    </label><br>
                <?php endforeach; ?>

                <!-- Display an error if there is one -->

            </div>
        </div>

        <div class="col-xs-1 ">
            <button type="submit">Next >></button>
        </div>
    </form>
</div>
</body>
</html>