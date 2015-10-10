{include file="search.tpl"}
<div class="background">
<section>

{foreach from = $data item = newsitem}
    <article>
       
        <h1>{$newsitem.title}</h1>
        <img class="pictures" src="{$newsitem.image}"><br>
        
        <content>{$newsitem.content}</content>
        
    </article>
{/foreach}

</section>
</div><br>

{include file="pagination.tpl"}


<br>
<br>
<br>
<br>