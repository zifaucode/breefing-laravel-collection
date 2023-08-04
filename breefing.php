<?php

Route::get('/', function() {
    $students = [
        [
            'first_name' => 'Rara',
            'last_name' => 'Anggara',
            'grade' => '1-A',
            'age' => 10,
            'spp' => 2000, 
        ],
        [
            'first_name' => 'Faisal',
            'last_name' => 'Reza',
            'grade' => '1-B',
            'age' => 10,
            'spp' => 4000, 
        ],
        [
            'first_name' => 'Fauzi',
            'last_name' => 'Agustin',
            'grade' => '2-C',
            'age' => 9,
            'spp' => 6000, 
        ],
        [   
            'first_name' => 'Airwan',
            'last_name' => 'H',
            'grade' => '2-D',
            'age' => 5,
            'spp' => 1500, 
        ],
        [
            'first_name' => 'Rezha',
            'last_name' => 'Pahlevi',
            'grade' => '3-D',
            'age' => 12,
            'spp' => 7000, 
        ],
    ];

    // $student = collect($students)->map(function($student) {
    //   return [ 
    //       'name' => $student['first_name'],
    //       'age_spp' => $student['age'] . '_' . $student['spp'], 
    //   ];
    // })->all();

    // return $student;

    // $student = collect($students)->groupBy(function($studentNewKey){
    //    return substr($studentNewKey['grade'], 0, 1);
    //     // return [$grade => $studentNewKey];
    // })->all();
    // return $student;

    // $replaceKey = collect($student)->map(function ($studentNewKey, $key) {
    //     // $grade = substr($key, strpos($key, '-') + 1);
    //     $grade = substr($key, 0, 1);
    //     // $numberGrade = (float) $grade;
    //     // $newKey = $numberGrade;

    //     return [$grade => $studentNewKey];
    // })->all();




    $student = collect($students)->filter(function($student){
      return $student['age']  % 2 != 0;
      
    })->values()
    ->map(function($stdn){
      return collect($stdn)->only(['first_name', 'age']);
    })
    ->all();
    // })->only(['first_name', 'age'])->all();

  // $filtered = collect($student)->map(function($studentFiltered){
  //   return [
  //     'name' => $studentFiltered['first_name'],
  //     'age' => $studentFiltered['age'],
  //   ];

  // })->all();

    return $student;
  

    


    // Latihan
    // 1. Ubah menjadi struktur ini menggunakan map:
    // [
    //     'name' => 'Rara Anggara',
    //     'age_spp' => '10_4000', 
    // ]

    // 2. Kelompokkan berdasarkan kelas menjadi struktur ini menggunakan groupBy:
    // [
    //     '1' => [
    //         'first_name' => 'Rara',
    //         'last_name' => 'Anggara',
    //         'grade' => '1-A',
    //         'age' => 10,
    //         'spp' => 2000, 
    //     ],
    //     [
    //         'first_name' => 'Faisal',
    //         'last_name' => 'Reza',
    //         'grade' => '1-B',
    //         'age' => 10,
    //         'spp' => 4000, 
    //     ],
    // ];

    // 3. Hanya tampilkan siswa yang umurnya ganjil menggunakan filter kemudian
    // hanya tampilkan nama dan umurnya saja


});
