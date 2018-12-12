<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
          Name: {{$user->first_name}}  {{$user->last_name}}
        </td>
      </tr>
      <br>
      <tr>
        <td>
          Email: {{$user->email}}
        </td>
      </tr>
    </table>
  </body>
</html>