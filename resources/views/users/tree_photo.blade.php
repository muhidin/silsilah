@extends('layouts.user-profile-wide')

@section('subtitle', trans('app.family_tree'))

@section('user-content')

<?php
$childsTotal = 0;
$grandChildsTotal = 0;
$ggTotal = 0;
$ggcTotal = 0;
$ggccTotal = 0;
$ggcccTotal = 0;
?>

<div id="wrapper">
    <span class="labelfoto1">
        {{ userPhoto($user, $user->yod ? ['style' => 'max-height:100px;-webkit-filter: grayscale(100%);filter: grayscale(100%);border-radius: 50%; overflow: hidden;'] : ['style' => 'max-height:100px;border-radius: 50%; overflow: hidden;'] ) }} <br>
        {{ link_to_route('users.tree_photo', $user->name, [$user->id], $user->yod?['style' => 'color: #999;'] : '', ['title' => $user->name.' ('.$user->gender.')'] ) }}</span>
        @if ($childsCount = $user->childs->count())
        <?php $childsTotal += $childsCount ?>
        <div class="branch lv1">
            @foreach($user->childs as $child)
            <div class="entry {{ $childsCount == 1 ? 'sole' : '' }} ">
                <span class="labelfoto2 {{ $childsCount == 1 ? '' : '' }}">
                    {{ userPhoto($child, $child->yod ? ['style' => 'max-height:100px;-webkit-filter: grayscale(100%);filter: grayscale(100%);border-radius: 50%; overflow: hidden;'] : ['style' => 'max-height:100px;border-radius: 50%; overflow: hidden;'] ) }}<br>
                    {{ link_to_route('users.tree_photo', $child->name, [$child->id], $child->yod?['style' => 'color: #999;'] : '', ['title' => $child->name.' ('.$child->gender.')']) }}
                </span><br><br><br><br><br><br>
                @if ($grandsCount = $child->childs->count())
                <?php $grandChildsTotal += $grandsCount ?>
                <div class="branch {{ $grandsCount == 1 ? $childsCount == 1 ? 'lv41a' : 'lv2' : 'lv2' }}">
                    @foreach($child->childs as $grand)
                    <div class="entry {{ $grandsCount == 1 ? $childsCount == 1 ? 'sole3' : 'sole1' : '' }} ">
                        <span class="labelfoto3 {{ $grandsCount == 1 ? $childsCount == 1 ? 'foto5' : 'foto' : '' }}">
                            {{ userPhoto($grand, $grand->yod ? ['style' => 'max-height:100px;-webkit-filter: grayscale(100%);filter: grayscale(100%);border-radius: 50%; overflow: hidden;'] : ['style' => 'max-height:100px;border-radius: 50%; overflow: hidden;'] ) }} <br>
                            {{ link_to_route('users.tree_photo', $grand->name, [$grand->id], $grand->yod?['style' => 'color: #999;'] : '', ['title' => $grand->name.' ('.$grand->gender.')']) }}
                        </span><br><br><br><br><br><br>
                        @if ($ggCount = $grand->childs->count())
                        <?php $ggTotal += $ggCount ?>
                        <div class="branch {{ $ggCount == 1 ? $grandsCount == 1 ? 'lv41' : 'lv3' : 'lv3' }}">
                            @foreach($grand->childs as $gg)
                            <div class="entry {{ $ggCount == 1 ? $grandsCount == 1 ? 'sole3' : 'sole1' : '' }}">
                                <span class="labelfoto4 {{ $ggCount == 1 ? $grandsCount == 1 ? 'foto5' : 'foto' : '' }}">
                                {{ userPhoto($gg, $gg->yod ? ['style' => 'max-height:100px;-webkit-filter: grayscale(100%);filter: grayscale(100%);border-radius: 50%; overflow: hidden;'] : ['style' => 'max-height:100px;border-radius: 50%; overflow: hidden;'] ) }} <br>
                                {{ link_to_route('users.tree_photo', $gg->name, [$gg->id],  $gg->yod?['style' => 'color: #999;'] : '', ['title' => $gg->name.' ('.$gg->gender.')']) }}
                                </span><br><br><br><br><br><br>
                                @if ($ggcCount = $gg->childs->count())
                                <?php $ggcTotal += $ggcCount ?>
                                <div class="branch {{ $ggcCount == 1 ? $ggCount == 1 ? 'lv41' : 'lv4' : 'lv4' }}">
                                    @foreach($gg->childs as $ggc)
                                    <div class="entry {{ $ggcCount == 1 ? $ggCount == 1 ? 'sole3' : 'sole1' : '' }}">
                                        <span class="labelfoto5 {{ $ggcCount == 1 ? $ggCount == 1 ? 'foto5' : 'foto' : '' }}">
                                        {{ userPhoto($ggc, $ggc->yod ? ['style' => 'max-height:100px;-webkit-filter: grayscale(100%);filter: grayscale(100%);border-radius: 50%; overflow: hidden;'] : ['style' => 'max-height:100px;border-radius: 50%; overflow: hidden;'] ) }} <br>
                                        {{ link_to_route('users.tree_photo', $ggc->name, [$ggc->id],  $ggc->yod?['style' => 'color: #999;'] : '', ['title' => $ggc->name.' ('.$ggc->gender.')']) }}
                                        </span><br><br><br><br><br><br>
                                        @if ($ggccCount = $ggc->childs->count())
                                        <?php $ggccTotal += $ggccCount ?>
                                        <div class="branch {{ $ggccCount == 1 ? $ggcCount == 1 ? 'lv41' : 'lv5' : 'lv5' }}">
                                            @foreach($ggc->childs as $ggcc)
                                            <div class="entry {{ $ggccCount == 1 ? $ggcCount == 1 ? 'sole3' : 'sole1' : '' }}">
                                                <span class="labelfoto6 {{ $ggccCount == 1 ? $ggcCount == 1 ? 'foto5' : 'foto' : '' }}">
                                                {{ userPhoto($ggcc, $ggcc->yod ? ['style' => 'max-height:100px;-webkit-filter: grayscale(100%);filter: grayscale(100%);border-radius: 50%; overflow: hidden;'] : ['style' => 'max-height:100px;border-radius: 50%; overflow: hidden;'] ) }} <br>
                                                {{ link_to_route('users.tree_photo', $ggcc->name, [$ggcc->id],  $ggcc->yod?['style' => 'color: #999;'] : '', ['title' => $ggcc->name.' ('.$ggcc->gender.')']) }}
                                                </span><br><br><br><br><br><br>
                                                
                                                @if ($ggcccCount = $ggcc->childs->count())
                                                <?php $ggcccTotal += $ggcccCount ?>
                                                <div class="branch {{ $ggcccCount == 1 ? $ggccCount == 1 ? 'lv41' : 'lv5' : 'lv5' }}">
                                                    @foreach($ggcc->childs as $ggccc)
                                                    <div class="entry {{ $ggcccCount == 1 ? $ggccCount == 1 ? 'sole3' : 'sole1' : '' }}">
                                                        <span class="labelfoto6 {{ $ggcccCount == 1 ? $ggccCount == 1 ? 'foto5' : 'foto' : '' }}">
                                                        {{ userPhoto($ggccc, $ggccc->yod ? ['style' => 'max-height:100px;-webkit-filter: grayscale(100%);filter: grayscale(100%);border-radius: 50%; overflow: hidden;'] : ['style' => 'max-height:100px;border-radius: 50%; overflow: hidden;'] ) }} <br>
                                                        {{ link_to_route('users.tree_photo', $ggccc->name, [$ggccc->id],  $ggccc->yod?['style' => 'color: #999;'] : '', ['title' => $ggccc->name.' ('.$ggcc->gender.')']) }}
                                                        </span><br><br><br><br><br><br>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                @endif

                                            </div>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endif
              
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<div class="container">
<hr>
<div class="row">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e6eeb80 (Upgrade ke Laravel 10 dan perbaikan)
    <style>
        table, tr, td {
            border: 1px solid black;
        }
        td {
            padding: 5px;
            text-align: center;
        }

    </style>
    <table>
        <tr>
            @if ($childsTotal) <td>{{ trans('app.child_count') }}</td> @endif
            @if ($grandChildsTotal) <td>{{ trans('app.grand_child_count') }}</td> @endif
            @if ($ggTotal) <td>Jumlah Cicit</td> @endif
            @if ($ggcTotal) <td>Jumlah Canggah</td> @endif
            @if ($ggccTotal) <td>Jumlah Wareng</td> @endif
            @if ($ggcccTotal) <td>Jumlah Udhek-udhek</td> @endif
        </tr>
        <tr>
            @if ($childsTotal) <td><strong style="font-size:30px">{{ $childsTotal }}</strong></td> @endif
            @if ($grandChildsTotal) <td><strong style="font-size:30px">{{ $grandChildsTotal }}</strong></td> @endif
            @if ($ggTotal) <td><strong style="font-size:30px">{{ $ggTotal }}</strong></td> @endif
            @if ($ggcTotal) <td><strong style="font-size:30px">{{ $ggcTotal }}</strong></td> @endif
            @if ($ggccTotal) <td><strong style="font-size:30px">{{ $ggccTotal }}</strong></td> @endif
            @if ($ggcccTotal) <td><strong style="font-size:30px">{{ $ggcccTotal }}</strong></td> @endif
        </tr>
    </table>

    {{-- <div class="col-md-1">&nbsp;</div>
<<<<<<< HEAD
=======
    <div class="col-md-1">&nbsp;</div>
>>>>>>> 9d62873 (upgrade ke Laravel 10)
=======
>>>>>>> e6eeb80 (Upgrade ke Laravel 10 dan perbaikan)
    @if ($childsTotal)
    <div class="col-md-1 text-right">{{ trans('app.child_count') }}</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px">{{ $childsTotal }}</strong></div>
    @endif
    @if ($grandChildsTotal)
    <div class="col-md-1 text-right">{{ trans('app.grand_child_count') }}</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px">{{ $grandChildsTotal }}</strong></div>
    @endif
    @if ($ggTotal)
    <div class="col-md-1 text-right">Jumlah Cicit</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px">{{ $ggTotal }}</strong></div>
    @endif
    @if ($ggcTotal)
    <div class="col-md-1 text-right">Jumlah Canggah</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px">{{ $ggcTotal }}</strong></div>
    @endif
    @if ($ggccTotal)
    <div class="col-md-1 text-right">Jumlah Wareng</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px">{{ $ggccTotal }}</strong></div>
    @endif
    @if ($ggcccTotal)
    <div class="col-md-1 text-right">Jumlah Udhek-udhek</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px">{{ $ggcccTotal }}</strong></div>
    @endif
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="col-md-1">&nbsp;</div> --}}
=======
    <div class="col-md-1">&nbsp;</div>
>>>>>>> 9d62873 (upgrade ke Laravel 10)
=======
    <div class="col-md-1">&nbsp;</div> --}}
>>>>>>> e6eeb80 (Upgrade ke Laravel 10 dan perbaikan)
</div>
</div>
<hr>
Info Istilah Silsilah ada di <a href="https://id.wikipedia.org/wiki/Anak_cucu" target="_blank">Wikipedia</a>

@endsection

@section ('ext_css')
<<<<<<< HEAD
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/treephoto.css') }}">
=======
<link rel="stylesheet" href="{{ asset('css/tree.css') }}">
>>>>>>> 9d62873 (upgrade ke Laravel 10)
=======
<link rel="stylesheet" href="{{ asset('css/treephoto.css') }}">
>>>>>>> e6eeb80 (Upgrade ke Laravel 10 dan perbaikan)
@endsection
