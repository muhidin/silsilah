<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">{{ __('user.edit') }}</h3></div>
    <div class="panel-body">
        {!! FormField::text('name', ['label' => __('user.name')]) !!}
        <div class="row">
            <div class="col-md-6">{!! FormField::text('nickname', ['label' => __('user.nickname')]) !!}</div>
            <div class="col-md-6">{!! FormField::radios('gender_id', [1 => __('app.male_code'), __('app.female_code')], ['label' => __('user.gender')]) !!}</div>
        </div>
        <div class="row">
            <div class="col-md-6">{!! FormField::text('birth_order', ['label' => __('user.birth_order'), 'type' => 'number', 'min' => 1]) !!}</div>
            <div class="col-md-6">{!! FormField::text('pob', ['label' => __('user.pob')]) !!}</div>
        </div>
        <div class="row">
            <div class="col-md-6">{!! FormField::text('yob', ['label' => __('user.yob'), 'placeholder' => __('app.example').' 1959']) !!}</div>
            <div class="col-md-6">{!! FormField::text('dob', ['label' => __('user.dob'), 'placeholder' => __('app.example').' 1959-07-20']) !!}</div>
        </div>
    </div>
</div>
