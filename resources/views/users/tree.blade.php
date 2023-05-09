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
    <span class="label">{{ link_to_route('users.tree', $user->name, [$user->id], $user->yod?['style' => 'color: #999;', 'title' => $user->name.' ('.$user->gender.')'] : ['title' => $user->name.' ('.$user->gender.')']) }}</span>
        @if ($childsCount = $user->childs->count())
        <?php $childsTotal += $childsCount ?>
        <div class="branch lv1">
            @foreach($user->childs as $child)
            <div class="entry {{ $childsCount == 1 ? 'sole' : '' }}">
                <span class="label">{{ link_to_route('users.tree', $child->name, [$child->id], $child->yod?['style' => 'color: #999;', 'title' => $child->name.' ('.$child->gender.')'] : ['title' => $child->name.' ('.$child->gender.')']) }}</span>
                @if ($grandsCount = $child->childs->count())
                <?php $grandChildsTotal += $grandsCount ?>
                <div class="branch lv2">
                    @foreach($child->childs as $grand)
                    <div class="entry {{ $grandsCount == 1 ? 'sole' : '' }}">
                        <span class="label">{{ link_to_route('users.tree', $grand->name, [$grand->id], $grand->yod?['style' => 'color: #999;', 'title' => $grand->name.' ('.$grand->gender.')'] : ['title' => $grand->name.' ('.$grand->gender.')']) }}</span>
                        @if ($ggCount = $grand->childs->count())
                        <?php $ggTotal += $ggCount ?>
                        <div class="branch lv3">
                            @foreach($grand->childs as $gg)
                            <div class="entry {{ $ggCount == 1 ? 'sole' : '' }}">
                                <span class="label">{{ link_to_route('users.tree', $gg->name, [$gg->id], $gg->yod?['style' => 'color: #999;', 'title' => $gg->name.' ('.$gg->gender.')'] : ['title' => $gg->name.' ('.$gg->gender.')']) }}</span>
                                @if ($ggcCount = $gg->childs->count())
                                <?php $ggcTotal += $ggcCount ?>
                                <div class="branch lv4">
                                    @foreach($gg->childs as $ggc)
                                    <div class="entry {{ $ggcCount == 1 ? 'sole' : '' }}">
                                        <span class="label">{{ link_to_route('users.tree', $ggc->name, [$ggc->id], $ggc->yod?['style' => 'color: #999;', 'title' => $ggc->name.' ('.$ggc->gender.')'] : ['title' => $ggc->name.' ('.$ggc->gender.')']) }}</span>
                                        @if ($ggccCount = $ggc->childs->count())
                                        <?php $ggccTotal += $ggccCount ?>
                                        <div class="branch lv5">
                                            @foreach($ggc->childs as $ggcc)
                                            <div class="entry {{ $ggccCount == 1 ? 'sole' : '' }}">
                                                <span class="label">{{ link_to_route('users.tree', $ggcc->name, [$ggcc->id], $ggcc->yod?['style' => 'color: #999;', 'title' => $ggcc->name.' ('.$ggcc->gender.')'] : ['title' => $ggcc->name.' ('.$ggcc->gender.')']) }}</span>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e6eeb80 (Upgrade ke Laravel 10 dan perbaikan)

                                                @if ($ggcccCount = $ggcc->childs->count())
                                                <?php $ggcccTotal += $ggcccCount ?>
                                                <div class="branch lv6">
                                                    @foreach($ggcc->childs as $ggccc)
                                                    <div class="entry {{ $ggcccCount == 1 ? 'sole' : '' }}">
                                                        <span class="label">{{ link_to_route('users.tree', $ggccc->name, [$ggccc->id], $ggccc->yod?['style' => 'color: #999;', 'title' => $ggccc->name.' ('.$ggccc->gender.')'] : ['title' => $ggccc->name.' ('.$ggccc->gender.')']) }}</span>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                @endif
        

<<<<<<< HEAD
=======
>>>>>>> 9d62873 (upgrade ke Laravel 10)
=======
>>>>>>> e6eeb80 (Upgrade ke Laravel 10 dan perbaikan)
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
    @endif --}}
    {{-- <div class="col-md-1">&nbsp;</div> --}}
</div>
@endsection

@section ('ext_css')
<link rel="stylesheet" href="{{ asset('css/tree.css') }}">
@endsection
