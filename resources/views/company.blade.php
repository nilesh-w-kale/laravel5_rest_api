<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    </head>
    <body>
        Company View:<br><br>

        @foreach($employees as $employee)
            <p>{{$employee->emp_name}}</p>
        @endforeach
    </body>
</html>
