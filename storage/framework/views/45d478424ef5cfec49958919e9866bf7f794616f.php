
<?php if($viewType == 'default'): ?>
    <?php if($from_id != $to_id): ?>
    <div class="message-card" data-id="<?php echo e($id); ?>">
        <p><?php echo ($message == null && $attachment != null && @$attachment[2] != 'file') ? $attachment[1] : nl2br($message); ?>

            <sub title="<?php echo e($fullTime); ?>"><?php echo e($time); ?></sub>
            
            <?php if(@$attachment[2] == 'file'): ?>
            <a href="<?php echo e(route(config('chatify.attachments.download_route_name'), ['fileName'=>$attachment[0]])); ?>" style="color: #595959;" class="file-download">
                <span class="fas fa-file"></span> <?php echo e($attachment[1]); ?></a>
            <?php endif; ?>
        </p>
        
        <?php if(@$attachment[2] == 'image'): ?>
        <div class="image-file chat-image" style="width: 250px; height: 150px;background-image: url('<?php echo e(Chatify::getAttachmentUrl($attachment[0])); ?>')">
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>


<?php if($viewType == 'sender'): ?>
    <div class="message-card mc-sender" title="<?php echo e($fullTime); ?>" data-id="<?php echo e($id); ?>">
        <div class="chatify-d-flex chatify-align-items-center" style="flex-direction: row-reverse; justify-content: flex-end;">
            <i class="fas fa-trash chatify-hover-delete-btn" data-id="<?php echo e($id); ?>"></i>
            <p style="margin-left: 5px;">
                <?php echo ($message == null && $attachment != null && @$attachment[2] != 'file') ? $attachment[1] : nl2br($message); ?>

                <sub title="<?php echo e($fullTime); ?>" class="message-time">
                    <span class="fas fa-<?php echo e($seen > 0 ? 'check-double' : 'check'); ?> seen"></span> <?php echo e($time); ?></sub>
                </sub>
                
                <?php if(@$attachment[2] == 'file'): ?>
                <a href="<?php echo e(route(config('chatify.attachments.download_route_name'), ['fileName'=>$attachment[0]])); ?>" class="file-download">
                    <span class="fas fa-file"></span> <?php echo e($attachment[1]); ?></a>
                <?php endif; ?>
            </p>
        </div>
        
        <?php if(@$attachment[2] == 'image'): ?>
        <div class="image-file chat-image" style="margin-top:10px;width: 250px; height: 150px;background-image: url('<?php echo e(Chatify::getAttachmentUrl($attachment[0])); ?>')">
        </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev/resources/views/vendor/Chatify/layouts/messageCard.blade.php ENDPATH**/ ?>