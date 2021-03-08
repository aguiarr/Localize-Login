
<?php require __DIR__ . "/parts/header.php"; ?>
<div class="content">
   <div class="labels">
        <div class="welcome">
            <label>Welcome!</label>
        </div>
        <div class="ydata">
            <label>Your data:</label>
        </div>
   </div>
    <div class="fields">
        <div class="field">
            <h4 class="feild-name">ID:</h4>
            <input type="text" readonly class="feild-input" value="<?=$user['id']?>"></input>
        </div>
        <div class="field">
            <h4 class="feild-name">Name:</h4>
            <input type="text" readonly class="feild-input" value="<?=$user['name']?>"></input>    
         </div>
        <div class="field">
            <h4 class="feild-name">Email:</h4>
            <input type="text" readonly class="feild-input" value="<?=$user['email']?>"></input>
        </div>
        <div class="field">
            <h4 class="feild-name">Phone:</h4>
            <input type="text" readonly class="feild-input" value="<?=$user['phone']?>"></input>
        </div>
    </div>
</div>
<?php require __DIR__ . "/parts/footer.php"; ?>