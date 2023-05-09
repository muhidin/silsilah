<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">{{ trans('user.profile') }}</h3></div>
    <div class="panel-body text-center">
        {{ userPhoto($user, $user->yod ? ['style' => 'width:100%;max-width:300px;-webkit-filter: grayscale(100%);filter: grayscale(100%);'] : ['style' => 'width:100%;max-width:300px;'] ) }}
    </div>
    <table class="table">
        <tbody>
            <tr>
                <th class="col-sm-4">{{ trans('user.name') }}</th>
                <td class="col-sm-8">{{ $user->profileLink() }}</td>
            </tr>
            <tr>
                <th>{{ trans('user.nickname') }}</th>
                <td>{{ $user->nickname }}</td>
            </tr>
            <tr>
                <th>{{ trans('user.gender') }}</th>
                <td>{{ $user->gender }}</td>
            </tr>
            <tr>
                <th>{{ trans('user.birth_order') }}</th>
                <td>{{ $user->birth_order }}</td>
            </tr>
            <tr>
                <th>{{ trans('user.pob') }}</th>
                <td>{{ $user->pob }}</td>
            </tr>
            
            <tr>
                @if ($user->dob)
                    <th>{{ trans('user.dob') }}</th>
                    <td>{{ \Carbon\Carbon::parse($user->dob)->format('d-m-Y')}}</td>
                @elseif ($user->yob)
                    <th>{{ trans('user.yob') }}</th>
                    <td>{{ $user->yob }}</td>
                @else
                    <th>{{ trans('user.yob') }}</th>
                    <td>No data</td>
                @endif
            </tr>
            <tr>
                @if ($user->dod)
                    <th>{{ trans('user.dod') }}</th>
                    <td>{{ \Carbon\Carbon::parse($user->dob)->format('d-m-Y')}}</td>
                @elseif ($user->yod)
                    <th>{{ trans('user.yod') }}</th>
                    <td>{{ $user->yod }}</td>
                @endif
            </tr>
            <tr>
                <th>{{ trans('user.age') }}</th>
                <td>
                    {{-- @if ($user->age) --}}
                        {!! $user->age_string !!}
                    {{-- @endif --}}
                </td>
            </tr>
            @if ($user->email)
            <tr>
                <th>{{ trans('user.email') }}</th>
                <td>{{ $user->email }}</td>
            </tr>
            @endif
            @if ($user->phone)
            <tr>
                <th>{{ trans('user.phone') }}</th>
                <td>{{ $user->phone }}</td>
            </tr>
            @endif
            @if ($user->address)
            <tr>
                <th>{{ trans('user.address') }}</th>
                <td>{!! nl2br($user->address) !!}</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
