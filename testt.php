<?php include "headercota.php" ?>
<link href="show.css" rel="stylesheet" />
<script type= "text/javascript" src = "js/countries.js"></script>
<script type= "text/javascript" src = "js/validator.js"></script>


<script>
  console.log(Validator);
</script>

<div class='row'>
  <fieldset>
    <legend class="scheduler-border"><h3>Informations concernants vos Collis.</h3></legend>
  <table >
  <thead>
    <tr>
      <th>Num Unités</th>
      <th>weight</th>
      <th>Type</th>
<th>temperature ?</th>
    </tr>
  </thead>
  <tbody><form>
    <tr class="colis1">
      <td><input class="form-control" id="number1" name="number1" type="number"  min="0.1" step="0.1  "/></td>
      <td>  <input class="form-control"  id="poids1" name="poids1" type="text" /></td>
      <td>  <input class="form-control"  id="type1" name="type1" type="text" /></td>
      <td>  <input class="form-control"  id="gerbable1" name="gerbable1" type="checkbox" /></td>
    </tr>

  </form></tbody>
</table>
  <div class="row">

  <div class="sixteen columns" id="addcolis">
      <label><i class="fa fa-plus-square"></i>Pour Ajouter Un Collis Clickez Ici. </label>
  </div></div>
</fieldset>

</div>
<script>jQuery.noConflict();
$(document).ready(function () {
$("#addcolis").on("click", function () {
  var clone = $("[class^=colis]:last")
  .clone(false, false)[0].outerHTML.replace(/(\d)/g, function(a) {
    return parseInt(a) + 1
  });
  $(clone).appendTo('table');

  console.log($(clone).attr("class"));
});
});</script></body>
</html>
