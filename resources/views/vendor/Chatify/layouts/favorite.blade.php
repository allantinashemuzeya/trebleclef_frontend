<div class="favorite-list-item">
    <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m"
        style="background-image: url('{{ Chatify::getUserWithAvatar($user)->avatar }}');">
    </div>
    <p>{{ strlen($user->firstname) > 5 ? substr($user->firstname,0,6).'..' : $user->firstname . ' ' . $user->lastname }}</p>
</div>
