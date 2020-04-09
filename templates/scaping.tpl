My name is <!--{$name}-->

<script language="javascript">
  var person = "<!--{$name}-->"
  function sayMyname(){
    console.log(`Hello ${person}`);
  }

  sayMyname();
</script>