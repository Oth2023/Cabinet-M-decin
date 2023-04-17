@extends('welcome')
@section('style')
<style>
    .filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: 20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
</style>

@endsection

@section('content')
<div class="row">
    <div class="panel panel-primary filterable">
     
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="Nom" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Sexe" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Téléphone" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Adresse" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Date naissance" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Specialite " disabled></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Nom</th>
                    <th>Sexe</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Date naissance</th>
                    <th>Specialite</th>
                    <th>Action</th>
                </tr>
                @foreach ($medecins as $med)
                <tr>
                    <td>{{$med->nom}}</td>
                    <td>{{$med->sexe}}</td>
                    <td>{{$med->adresse}}</td>
                    <td>{{$med->date_naissance}}</td>
                    <td>{{$med->téléphone}}</td>
                    <td>{{$med->email}}</td>
                    <td>{{$med->specialite}}</td>
                    <td></td>
               
                 </tr>
                @endforeach
              
            </tbody>
        </table>
    </div>
</div> 
@endsection
@section('js')

<script>
    $(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
@endsection