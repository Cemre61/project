<div class="background">
  <h1>You have searched for the following:</h1>
   
   <section>
    
    {foreach from = $data item = newsitem}
       
        <article>
            <h1>{$newsitem.title}</h1>
        <img class="pictures" src="{$newsitem.image}"><br>
        
        <content>{$newsitem.content}</content>
        </article>
    {/foreach}

</section>
</div>
<br>
<br>