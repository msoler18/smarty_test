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

{* Arrays *}
<ul>
  <li><strong>Name:</strong>{$first_person.name}</li>
  <li><strong>Last name:</strong>{$first_person.last_name}</li>
  <li><strong>Job:</strong>{$first_person.job}</li>
  <li><strong>Email:</strong>{$first_person.email}</li>
  <li><strong>Phone:</strong>{$first_person.phone}</li>
</ul>


{* Variables modificators *}
Is my name capitalized {$me_capitalize|capitalize}

<p>{$girlfriend|cat:" is beautiful "}</p>

<p>My name is:{$largest_name|capitalize}and my name has {$largest_name|count_characters} characters.</p>

{assign var=words_name value={$largest_name|count_words}}

{if $words_name == 4 }
  <p>Person has a largest name</p>
{else}
  <p>Person hasn't a largest name</p>
{/if}

Short lorem :{$largest_lorem|truncate:20:"<br>"}
<br>


{section name=identifier loop=$ids}
  id:{$ids[identifier]}<br />
{/section}

{* {debug} *}

{html_select_date}

{mailto address="msoler735@gmail.com"}

<br>
