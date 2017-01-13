<!-- By Aurelien -->

<div class="popup-box chat-popup" id="qnimate">
  <div class="popup-head">
    <p>Chat</p>
    <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button">
      <i class="glyphicon glyphicon-off"></i>
    </button>
  </div>
	<div class="popup-messages">
		<div class="direct-chat-messages">
			<div class="chat-box-single-line">
				<abbr class="timestamp">October 8th, 2015</abbr>
			</div>

<?php 		
	$cpt = 0;
  foreach ($context->chats as $chat) {
		$cpt++;
		if ($cpt<100) {
?>

      <!-- Message. Default to the left -->
      <div class="direct-chat-msg doted-border">
        <div class="direct-chat-info clearfix">
          <span class="direct-chat-name pull-left">

<?php
      echo strip_tags($chat->emetteur->nom, '')." ".strip_tags($chat->emetteur->prenom, '');
?>

          </span>
        </div>
        <!-- /.direct-chat-info -->
        <img alt="iamgurdeeposahan" src=	

<?php
      if ($chat->emetteur->avatar == null) {
		    echo "images/no-image.png";
      }
      else {
        echo $chat->emetteur->avatar;
      }
?>

				class="direct-chat-img">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">

<?php
      echo strip_tags($chat->post->texte, '');
?>

        </div>
				<div class="direct-chat-info clearfix">
          <span class="direct-chat-timestamp pull-right">

<?php
      echo strip_tags($chat->post->date->format('Y-m-d H:i:s'), '');
?>

          </span>
        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->

<?php 
    }
  }
?>

    </div>
	</div>
	<div class="popup-messages-footer">
		<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
	</div>
</div>
<script>

  $(function(){
    $("#addClass").click(function(){
      $('#qnimate').addClass('popup-box-on');
    });
    $("#removeClass").click(function(){
      $('#qnimate').removeClass('popup-box-on');
    });
  });

  $(function(){
    $("#qnimate").draggable();
    $("#finalchat").resizable();     
  });

</script>