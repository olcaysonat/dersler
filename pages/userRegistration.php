
<form id="user_reg" name="user_reg" method="post" action="includes/user.php">
    <table width="289" border="0">
        <tr>
            <td width="93">Kullanici adi</td>
            <td width="186"><input type="text" name="username" id="user_name" /></td>
        </tr>
        <tr>
            <td>Ad</td>
            <td><input type="text" name="firstname" id="firstname" /></td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="lastname" id="lastname" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="user_email" /></td>
        </tr>
        <tr>
            <td>Sifre</td>
            <td><input type="password" name="password" id="password" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="save" id="save"/></td>
        </tr>
    </table>
</form>


<?php

