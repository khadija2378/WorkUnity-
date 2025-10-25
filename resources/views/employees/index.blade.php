<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>Workunity</title>
</head>
<body>
    <nav class="flex justify-between shadow-lg p-4">
        <a href="{{ route('employees.index') }}" class="font-medium text-xl">WorkUnity</a>
        <a href="{{ route('employees.add') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"><i class="fa-solid fa-plus"></i>Ajouter</a>
    </nav>
    <section class="m-10 space-y-10">
        <h1 class="text-center font-medium text-2xl">Application Gestion Des Employées</h1>
        <h3 class="font-medium text-lg">Liste employer</h3>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Department
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Salary
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $employees as $employee)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $employee->id }}
                </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $employee->Name }}
                </th>
                <td class="px-6 py-4">
                    {{ $employee->Department }}
                </td>
                <td class="px-6 py-4">
                    {{ $employee->Email }}
                </td>
                <td class="px-6 py-4">
                    {{ $employee->Phone }}
                </td>
                
                <td class="px-6 py-4">
                    {{ $employee->Salary }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('employees.edit',$employee->id) }}"><i class="fa-solid fa-pen-to-square text-orange-300"></i></a>
                    <a href="{{ route('employees.destroy',$employee->id) }}"><i class="fa-solid fa-trash text-red-600"></i></a>
                    
                </td>
            </tr>
            @endforeach
            
          
        </tbody>
    </table>
</div>
    </section>
    


</body>
</html>