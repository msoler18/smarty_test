{* Basic Syntax Examples *}

{* Comments *}

{* this is 
  a multiline comment from
  test smarty soler
*}

{* Variables *}

{assign var=name value="Miguel Soler"}
{$name}

{* Control flow *}

{if $name}
  Welcome to my page {$name}
{else} 
  Welcome to my page nice person!!
{/if} 

{for $x = 1 to 20 step 2}
  {* <h1> Hello my name is {$name} {$x} time</h1> *}
{/for}

{* Operations *}
{assign var=num1 value=10}
{assign var=num2 value=20}
{assign var=result value="`$num1+$num2`"}
{$result}

