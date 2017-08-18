<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>:: LOGIN EJEMPLKO::</title>
    </head>
    <body>
    <center>
        <h1>INICIAR SESION</h1>
        <form action="../../controladores/ControlUsuario.php" method="POST">
            <table>
                <tr>
                    <th>ID:</th>
                    <td><input type="number" required name="id" /></td>
                </tr>
                 <tr>
                    <th>PASS:</th>
                    <td><input type="password" required name="pass" /></td>
                </tr>
                 <tr>
                   
                     <td colspan="2">
                         <input type="submit" name="accion" value="Login" />
                         <input type="reset" value="Limpiar" />
                     </td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>
