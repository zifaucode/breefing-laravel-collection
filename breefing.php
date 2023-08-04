<?php

Route::get('/', function() {
    $students = [
        [
            'first_name' => 'Fauzi',
            'last_name' => 'Keren',
            'grade' => '1-B',
            'age' => 10,
            'spp' => 4000, 
        ],
        [
            'first_name' => 'Fauzi',
            'last_name' => 'Agustian',
            'grade' => '2-C',
            'age' => 9,
            'spp' => 6000, 
        ];

    // ================================ NO 1 ===============================
    // $student = collect($students)->map(function($student) {
    //   return [ 
    //       'name' => $student['first_name'],
    //       'age_spp' => $student['age'] . '_' . $student['spp'], 
    //   ];
    // })->all();

    // return $student;
    // ================================ NO 1 ===============================


    // ================================ NO 2 ===============================
    // $student = collect($students)->groupBy(function($studentNewKey){
    //    return substr($studentNewKey['grade'], 0, 1);
    //     // return [$grade => $studentNewKey];
    // })->all();
    // return $student;

    // ================================ NO 2 ===============================


    // ================================ NO 3 ===============================
    // $student = collect($students)->filter(function($student){
    //   return $student['age']  % 2 != 0;
      
    // })->values()
    // ->map(function($stdn){
    //   return collect($stdn)->only(['first_name', 'age']);
    // })
    // ->all();
    // })->only(['first_name', 'age'])->all();
   
    // return $student;
     // ================================ NO 3 ===============================
  

    


    // Latihan
    // 1. Ubah menjadi struktur ini menggunakan map:
    // [
    //     'name' => 'Fauzi Agustian',
    //     'age_spp' => '10_4000', 
    // ]

    // 2. Kelompokkan berdasarkan kelas menjadi struktur ini menggunakan groupBy:
    // [
    //     '1' => [
    //         'first_name' => 'Fauzi',
    //         'last_name' => 'Agustian',
    //         'grade' => '1-A',
    //         'age' => 10,
    //         'spp' => 2000, 
    //     ],
    //     [
    //         'first_name' => 'Fauzi',
    //         'last_name' => 'Keren',
    //         'grade' => '1-B',
    //         'age' => 10,
    //         'spp' => 4000, 
    //     ],
    // ];

    // 3. Hanya tampilkan siswa yang umurnya ganjil menggunakan filter kemudian
    // hanya tampilkan nama dan umurnya saja


});
