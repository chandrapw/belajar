<!-- name input -->
<input type="text" id="name" name="name" value="Jonny Dough" />

<script>
var name = document.getElementById("name");
if (name.value != name.defaultValue) alert("#name has changed");
</script>