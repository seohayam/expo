@if (Auth::guard('store_owner')->check() && $storeNum != 0)
    <form class="" method="POST" action="{{ route('applications.store', ['store_owner' => Auth::id()])}}">
        @csrf
        <input name="itemId" type="hidden" value="{{ $item->id }}">
        <input name="userId" type="hidden" value="{{$item->user->id}}">
        <input type="submit" value="応募する">
    </form>
@elseif(Auth::guard('store_owner')->check() && $storeNum == 0)
    <a href="{{ route('stores.create', ['store_owner' => Auth::guard('store_owner')->id()]) }}">お店を登録して応募</a>
@else
    <a href="{{$item->item_url}}">ネットショップへ</a>
@endif