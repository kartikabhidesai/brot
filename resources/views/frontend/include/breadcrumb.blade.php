 <!--breadcrumb area start--> 
 @if(isset($header))
<div class="breadcrumb-area">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            @php 
                            $count = count($header['breadcrumb']); 
                            $temp = 1;
                            @endphp 
                            @foreach($header['breadcrumb'] as $key => $value)

                            @php $value = (empty($value)) ? 'javascript:;' : $value; @endphp
                            @if($temp!=$count)
                            <li class="breadcrumb-item"><a href="{{ route($value) }}" class="">  {{ $key }}  </a></li>
                            @else
                                <li class="breadcrumb-item active"> {{ $key }} </li>
                            @endif

                            @php $temp = $temp+1; @endphp
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
 @endif
 <!--breadcrumb area end--> 