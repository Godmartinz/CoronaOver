@extends('layout')
<div id="mc_embed_signup">
    <form action="/guess/create" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" >
    @csrf
        <input type="name" value="" name="name" class="email" id="name" placeholder="Name" required>
        <input type="date" value="" name="date" class="date"  placeholder="Date" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_cdb7b577e41181934ed6a6a44_e65110b38d" value=""></div>

        <!-- <div class="clear"> --><input type="submit" value="Submit" name="submit" id="mc-embedded-subscribe" class="button"><!-- </div> -->

    </form>
</div>

