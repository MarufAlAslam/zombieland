 <?php
   if(isset($_POST['clearAllBtn'])){
    $c1 = fopen('./file-db/cleared1.txt', 'w');//opens file in append mode  
    $c2 = fopen('./file-db/cleared2.txt', 'w');//opens file in append mode  
    $c3 = fopen('./file-db/cleared3.txt', 'w');//opens file in append mode  
    $c4 = fopen('./file-db/cleared4.txt', 'w');//opens file in append mode  
    $c5 = fopen('./file-db/cleared5.txt', 'w');//opens file in append mode  
    $c6 = fopen('./file-db/cleared6.txt', 'w');//opens file in append mode  
    $c7 = fopen('./file-db/cleared7.txt', 'w');//opens file in append mode  
    $c8 = fopen('./file-db/cleared8.txt', 'w');//opens file in append mode  
    $c9 = fopen('./file-db/cleared9.txt', 'w');//opens file in append mode  
    $c10 = fopen('./file-db/cleared10.txt', 'w');//opens file in append mode  
    $c11 = fopen('./file-db/cleared11.txt', 'w');//opens file in append mode  
    $c12 = fopen('./file-db/cleared12.txt', 'w');//opens file in append mode  
    $c13 = fopen('./file-db/cleared13.txt', 'w');//opens file in append mode  
    $c14 = fopen('./file-db/cleared14.txt', 'w');//opens file in append mode  
    $c15 = fopen('./file-db/cleared15.txt', 'w');//opens file in append mode  
    $c16 = fopen('./file-db/cleared16.txt', 'w');//opens file in append mode 
    $c17 = fopen('./file-db/cleared17.txt', 'w');//opens file in append mode  
    $c18 = fopen('./file-db/cleared18.txt', 'w');//opens file in append mode  
    $c19 = fopen('./file-db/cleared19.txt', 'w');//opens file in append mode  
    $c20 = fopen('./file-db/cleared20.txt', 'w');//opens file in append mode  
    $c21 = fopen('./file-db/cleared21.txt', 'w');//opens file in append mode  
    $c22 = fopen('./file-db/cleared22.txt', 'w');//opens file in append mode  
    $c23 = fopen('./file-db/cleared23.txt', 'w');//opens file in append mode  
    $c24 = fopen('./file-db/cleared24.txt', 'w');//opens file in append mode 
    $c25 = fopen('./file-db/cleared25.txt', 'w');//opens file in append mode  
    $c26 = fopen('./file-db/cleared26.txt', 'w');//opens file in append mode  
    $c27 = fopen('./file-db/cleared27.txt', 'w');//opens file in append mode  
    $c28 = fopen('./file-db/cleared28.txt', 'w');//opens file in append mode  
    $c29 = fopen('./file-db/cleared29.txt', 'w');//opens file in append mode  
    $c30 = fopen('./file-db/cleared30.txt', 'w');//opens file in append mode  
    $c31 = fopen('./file-db/cleared31.txt', 'w');//opens file in append mode  
    $c32 = fopen('./file-db/cleared32.txt', 'w');//opens file in append mode 
    $c33 = fopen('./file-db/cleared33.txt', 'w');//opens file in append mode  
    $c34 = fopen('./file-db/cleared34.txt', 'w');//opens file in append mode  
    $c35 = fopen('./file-db/cleared35.txt', 'w');//opens file in append mode  
    $c36 = fopen('./file-db/cleared36.txt', 'w');//opens file in append mode  
    $c37 = fopen('./file-db/cleared37.txt', 'w');//opens file in append mode  
    $c38 = fopen('./file-db/cleared38.txt', 'w');//opens file in append mode  
    $c39 = fopen('./file-db/cleared39.txt', 'w');//opens file in append mode  
    $c40 = fopen('./file-db/cleared40.txt', 'w');//opens file in append mode  
    $c41 = fopen('./file-db/cleared41.txt', 'w');//opens file in append mode  
    $c42 = fopen('./file-db/cleared42.txt', 'w');//opens file in append mode  
    $c43 = fopen('./file-db/cleared43.txt', 'w');//opens file in append mode  
    $c44 = fopen('./file-db/cleared44.txt', 'w');//opens file in append mode  
    $c45 = fopen('./file-db/cleared45.txt', 'w');//opens file in append mode  
    $c46 = fopen('./file-db/cleared46.txt', 'w');//opens file in append mode  
    $c47 = fopen('./file-db/cleared47.txt', 'w');//opens file in append mode  
    $c48 = fopen('./file-db/cleared48.txt', 'w');//opens file in append mode 
    $c49 = fopen('./file-db/cleared49.txt', 'w');//opens file in append mode  
    $c50 = fopen('./file-db/cleared50.txt', 'w');//opens file in append mode  
    $c51 = fopen('./file-db/cleared51.txt', 'w');//opens file in append mode  
    $c52 = fopen('./file-db/cleared52.txt', 'w');//opens file in append mode  
    $c53 = fopen('./file-db/cleared53.txt', 'w');//opens file in append mode  
    $c54 = fopen('./file-db/cleared54.txt', 'w');//opens file in append mode  
    $c55 = fopen('./file-db/cleared55.txt', 'w');//opens file in append mode  
    $c56 = fopen('./file-db/cleared56.txt', 'w');//opens file in append mode 
    $c57 = fopen('./file-db/cleared57.txt', 'w');//opens file in append mode  
    $c58 = fopen('./file-db/cleared58.txt', 'w');//opens file in append mode  
    $c59 = fopen('./file-db/cleared59.txt', 'w');//opens file in append mode  
    $c60 = fopen('./file-db/cleared60.txt', 'w');//opens file in append mode  
    $c61 = fopen('./file-db/cleared61.txt', 'w');//opens file in append mode  
    $c62 = fopen('./file-db/cleared62.txt', 'w');//opens file in append mode  
    $c63 = fopen('./file-db/cleared63.txt', 'w');//opens file in append mode  
    $c64 = fopen('./file-db/cleared64.txt', 'w');//opens file in append mode 

    $p1 = fopen('./file-db/progress1.txt', 'w');//opens file in append mode  
    $p2 = fopen('./file-db/progress2.txt', 'w');//opens file in append mode  
    $p3 = fopen('./file-db/progress3.txt', 'w');//opens file in append mode  
    $p4 = fopen('./file-db/progress4.txt', 'w');//opens file in append mode  
    $p5 = fopen('./file-db/progress5.txt', 'w');//opens file in append mode  
    $p6 = fopen('./file-db/progress6.txt', 'w');//opens file in append mode  
    $p7 = fopen('./file-db/progress7.txt', 'w');//opens file in append mode  
    $p8 = fopen('./file-db/progress8.txt', 'w');//opens file in append mode  
    $p9 = fopen('./file-db/progress9.txt', 'w');//opens file in append mode  
    $p10 = fopen('./file-db/progress10.txt', 'w');//opens file in append mode  
    $p11 = fopen('./file-db/progress11.txt', 'w');//opens file in append mode  
    $p12 = fopen('./file-db/progress12.txt', 'w');//opens file in append mode  
    $p13 = fopen('./file-db/progress13.txt', 'w');//opens file in append mode  
    $p14 = fopen('./file-db/progress14.txt', 'w');//opens file in append mode  
    $p15 = fopen('./file-db/progress15.txt', 'w');//opens file in append mode  
    $p16 = fopen('./file-db/progress16.txt', 'w');//opens file in append mode 
    $p17 = fopen('./file-db/progress17.txt', 'w');//opens file in append mode  
    $p18 = fopen('./file-db/progress18.txt', 'w');//opens file in append mode  
    $p19 = fopen('./file-db/progress19.txt', 'w');//opens file in append mode  
    $p20 = fopen('./file-db/progress20.txt', 'w');//opens file in append mode  
    $p21 = fopen('./file-db/progress21.txt', 'w');//opens file in append mode  
    $p22 = fopen('./file-db/progress22.txt', 'w');//opens file in append mode  
    $p23 = fopen('./file-db/progress23.txt', 'w');//opens file in append mode  
    $p24 = fopen('./file-db/progress24.txt', 'w');//opens file in append mode 
    $p25 = fopen('./file-db/progress25.txt', 'w');//opens file in append mode  
    $p26 = fopen('./file-db/progress26.txt', 'w');//opens file in append mode  
    $p27 = fopen('./file-db/progress27.txt', 'w');//opens file in append mode  
    $p28 = fopen('./file-db/progress28.txt', 'w');//opens file in append mode  
    $p29 = fopen('./file-db/progress29.txt', 'w');//opens file in append mode  
    $p30 = fopen('./file-db/progress30.txt', 'w');//opens file in append mode  
    $p31 = fopen('./file-db/progress31.txt', 'w');//opens file in append mode  
    $p32 = fopen('./file-db/progress32.txt', 'w');//opens file in append mode 
    $p33 = fopen('./file-db/progress33.txt', 'w');//opens file in append mode  
    $p34 = fopen('./file-db/progress34.txt', 'w');//opens file in append mode  
    $p35 = fopen('./file-db/progress35.txt', 'w');//opens file in append mode  
    $p36 = fopen('./file-db/progress36.txt', 'w');//opens file in append mode  
    $p37 = fopen('./file-db/progress37.txt', 'w');//opens file in append mode  
    $p38 = fopen('./file-db/progress38.txt', 'w');//opens file in append mode  
    $p39 = fopen('./file-db/progress39.txt', 'w');//opens file in append mode  
    $p40 = fopen('./file-db/progress40.txt', 'w');//opens file in append mode  
    $p41 = fopen('./file-db/progress41.txt', 'w');//opens file in append mode  
    $p42 = fopen('./file-db/progress42.txt', 'w');//opens file in append mode  
    $p43 = fopen('./file-db/progress43.txt', 'w');//opens file in append mode  
    $p44 = fopen('./file-db/progress44.txt', 'w');//opens file in append mode  
    $p45 = fopen('./file-db/progress45.txt', 'w');//opens file in append mode  
    $p46 = fopen('./file-db/progress46.txt', 'w');//opens file in append mode  
    $p47 = fopen('./file-db/progress47.txt', 'w');//opens file in append mode  
    $p48 = fopen('./file-db/progress48.txt', 'w');//opens file in append mode 
    $p49 = fopen('./file-db/progress49.txt', 'w');//opens file in append mode  
    $p50 = fopen('./file-db/progress50.txt', 'w');//opens file in append mode  
    $p51 = fopen('./file-db/progress51.txt', 'w');//opens file in append mode  
    $p52 = fopen('./file-db/progress52.txt', 'w');//opens file in append mode  
    $p53 = fopen('./file-db/progress53.txt', 'w');//opens file in append mode  
    $p54 = fopen('./file-db/progress54.txt', 'w');//opens file in append mode  
    $p55 = fopen('./file-db/progress55.txt', 'w');//opens file in append mode  
    $p56 = fopen('./file-db/progress56.txt', 'w');//opens file in append mode 
    $p57 = fopen('./file-db/progress57.txt', 'w');//opens file in append mode  
    $p58 = fopen('./file-db/progress58.txt', 'w');//opens file in append mode  
    $p59 = fopen('./file-db/progress59.txt', 'w');//opens file in append mode  
    $p60 = fopen('./file-db/progress60.txt', 'w');//opens file in append mode  
    $p61 = fopen('./file-db/progress61.txt', 'w');//opens file in append mode  
    $p62 = fopen('./file-db/progress62.txt', 'w');//opens file in append mode  
    $p63 = fopen('./file-db/progress63.txt', 'w');//opens file in append mode  
    $p64 = fopen('./file-db/progress64.txt', 'w');//opens file in append mode 
    

    $i1 = fopen('./file-db/issue1.txt', 'w');//opens file in append mode  
    $i2 = fopen('./file-db/issue2.txt', 'w');//opens file in append mode  
    $i3 = fopen('./file-db/issue3.txt', 'w');//opens file in append mode  
    $i4 = fopen('./file-db/issue4.txt', 'w');//opens file in append mode  
    $i5 = fopen('./file-db/issue5.txt', 'w');//opens file in append mode  
    $i6 = fopen('./file-db/issue6.txt', 'w');//opens file in append mode  
    $i7 = fopen('./file-db/issue7.txt', 'w');//opens file in append mode  
    $i8 = fopen('./file-db/issue8.txt', 'w');//opens file in append mode  
    $i9 = fopen('./file-db/issue9.txt', 'w');//opens file in append mode  
    $i10 = fopen('./file-db/issue10.txt', 'w');//opens file in append mode  
    $i11 = fopen('./file-db/issue11.txt', 'w');//opens file in append mode  
    $i12 = fopen('./file-db/issue12.txt', 'w');//opens file in append mode  
    $i13 = fopen('./file-db/issue13.txt', 'w');//opens file in append mode  
    $i14 = fopen('./file-db/issue14.txt', 'w');//opens file in append mode  
    $i15 = fopen('./file-db/issue15.txt', 'w');//opens file in append mode  
    $i16 = fopen('./file-db/issue16.txt', 'w');//opens file in append mode 
    $i17 = fopen('./file-db/issue17.txt', 'w');//opens file in append mode  
    $i18 = fopen('./file-db/issue18.txt', 'w');//opens file in append mode  
    $i19 = fopen('./file-db/issue19.txt', 'w');//opens file in append mode  
    $i20 = fopen('./file-db/issue20.txt', 'w');//opens file in append mode  
    $i21 = fopen('./file-db/issue21.txt', 'w');//opens file in append mode  
    $i22 = fopen('./file-db/issue22.txt', 'w');//opens file in append mode  
    $i23 = fopen('./file-db/issue23.txt', 'w');//opens file in append mode  
    $i24 = fopen('./file-db/issue24.txt', 'w');//opens file in append mode 
    $i25 = fopen('./file-db/issue25.txt', 'w');//opens file in append mode  
    $i26 = fopen('./file-db/issue26.txt', 'w');//opens file in append mode  
    $i27 = fopen('./file-db/issue27.txt', 'w');//opens file in append mode  
    $i28 = fopen('./file-db/issue28.txt', 'w');//opens file in append mode  
    $i29 = fopen('./file-db/issue29.txt', 'w');//opens file in append mode  
    $i30 = fopen('./file-db/issue30.txt', 'w');//opens file in append mode  
    $i31 = fopen('./file-db/issue31.txt', 'w');//opens file in append mode  
    $i32 = fopen('./file-db/issue32.txt', 'w');//opens file in append mode 
    $i33 = fopen('./file-db/issue33.txt', 'w');//opens file in append mode  
    $i34 = fopen('./file-db/issue34.txt', 'w');//opens file in append mode  
    $i35 = fopen('./file-db/issue35.txt', 'w');//opens file in append mode  
    $i36 = fopen('./file-db/issue36.txt', 'w');//opens file in append mode  
    $i37 = fopen('./file-db/issue37.txt', 'w');//opens file in append mode  
    $i38 = fopen('./file-db/issue38.txt', 'w');//opens file in append mode  
    $i39 = fopen('./file-db/issue39.txt', 'w');//opens file in append mode  
    $i40 = fopen('./file-db/issue40.txt', 'w');//opens file in append mode  
    $i41 = fopen('./file-db/issue41.txt', 'w');//opens file in append mode  
    $i42 = fopen('./file-db/issue42.txt', 'w');//opens file in append mode  
    $i43 = fopen('./file-db/issue43.txt', 'w');//opens file in append mode  
    $i44 = fopen('./file-db/issue44.txt', 'w');//opens file in append mode  
    $i45 = fopen('./file-db/issue45.txt', 'w');//opens file in append mode  
    $i46 = fopen('./file-db/issue46.txt', 'w');//opens file in append mode  
    $i47 = fopen('./file-db/issue47.txt', 'w');//opens file in append mode  
    $i48 = fopen('./file-db/issue48.txt', 'w');//opens file in append mode 
    $i49 = fopen('./file-db/issue49.txt', 'w');//opens file in append mode  
    $i50 = fopen('./file-db/issue50.txt', 'w');//opens file in append mode  
    $i51 = fopen('./file-db/issue51.txt', 'w');//opens file in append mode  
    $i52 = fopen('./file-db/issue52.txt', 'w');//opens file in append mode  
    $i53 = fopen('./file-db/issue53.txt', 'w');//opens file in append mode  
    $i54 = fopen('./file-db/issue54.txt', 'w');//opens file in append mode  
    $i55 = fopen('./file-db/issue55.txt', 'w');//opens file in append mode  
    $i56 = fopen('./file-db/issue56.txt', 'w');//opens file in append mode 
    $i57 = fopen('./file-db/issue57.txt', 'w');//opens file in append mode  
    $i58 = fopen('./file-db/issue58.txt', 'w');//opens file in append mode  
    $i59 = fopen('./file-db/issue59.txt', 'w');//opens file in append mode  
    $i60 = fopen('./file-db/issue60.txt', 'w');//opens file in append mode  
    $i61 = fopen('./file-db/issue61.txt', 'w');//opens file in append mode  
    $i62 = fopen('./file-db/issue62.txt', 'w');//opens file in append mode  
    $i63 = fopen('./file-db/issue63.txt', 'w');//opens file in append mode  
    $i64 = fopen('./file-db/issue64.txt', 'w');//opens file in append mode 

    fwrite($c1, '');
    fwrite($c2, '');
    fwrite($c3, '');
    fwrite($c4, '');
    fwrite($c5, '');
    fwrite($c6, '');
    fwrite($c7, '');
    fwrite($c8, '');
    fwrite($c9, '');
    fwrite($c10, '');
    fwrite($c11, '');
    fwrite($c12, '');
    fwrite($c13, '');
    fwrite($c14, '');
    fwrite($c15, '');
    fwrite($c16, '');
    fwrite($c17, '');
    fwrite($c18, '');
    fwrite($c19, '');
    fwrite($c20, '');
    fwrite($c21, '');
    fwrite($c22, '');
    fwrite($c23, '');
    fwrite($c24, '');
    fwrite($c25, '');
    fwrite($c26, '');
    fwrite($c27, '');
    fwrite($c28, '');
    fwrite($c29, '');
    fwrite($c30, '');
    fwrite($c31, '');
    fwrite($c32, '');
    fwrite($c33, '');
    fwrite($c34, '');
    fwrite($c35, '');
    fwrite($c36, '');
    fwrite($c37, '');
    fwrite($c38, '');
    fwrite($c39, '');
    fwrite($c40, '');
    fwrite($c41, '');
    fwrite($c42, '');
    fwrite($c43, '');
    fwrite($c44, '');
    fwrite($c45, '');
    fwrite($c46, '');
    fwrite($c47, '');
    fwrite($c48, '');
    fwrite($c49, '');
    fwrite($c50, '');
    fwrite($c51, '');
    fwrite($c52, '');
    fwrite($c53, '');
    fwrite($c54, '');
    fwrite($c55, '');
    fwrite($c56, '');
    fwrite($c57, '');
    fwrite($c58, '');
    fwrite($c59, '');
    fwrite($c60, '');
    fwrite($c61, '');
    fwrite($c62, '');
    fwrite($c63, '');
    fwrite($c64, '');


    fwrite($p1, '');
    fwrite($p2, '');
    fwrite($p3, '');
    fwrite($p4, '');
    fwrite($p5, '');
    fwrite($p6, '');
    fwrite($p7, '');
    fwrite($p8, '');
    fwrite($p9, '');
    fwrite($p10, '');
    fwrite($p11, '');
    fwrite($p12, '');
    fwrite($p13, '');
    fwrite($p14, '');
    fwrite($p15, '');
    fwrite($p16, '');
    fwrite($p17, '');
    fwrite($p18, '');
    fwrite($p19, '');
    fwrite($p20, '');
    fwrite($p21, '');
    fwrite($p22, '');
    fwrite($p23, '');
    fwrite($p24, '');
    fwrite($p25, '');
    fwrite($p26, '');
    fwrite($p27, '');
    fwrite($p28, '');
    fwrite($p29, '');
    fwrite($p30, '');
    fwrite($p31, '');
    fwrite($p32, '');
    fwrite($p33, '');
    fwrite($p34, '');
    fwrite($p35, '');
    fwrite($p36, '');
    fwrite($p37, '');
    fwrite($p38, '');
    fwrite($p39, '');
    fwrite($p40, '');
    fwrite($p41, '');
    fwrite($p42, '');
    fwrite($p43, '');
    fwrite($p44, '');
    fwrite($p45, '');
    fwrite($p46, '');
    fwrite($p47, '');
    fwrite($p48, '');
    fwrite($p49, '');
    fwrite($p50, '');
    fwrite($p51, '');
    fwrite($p52, '');
    fwrite($p53, '');
    fwrite($p54, '');
    fwrite($p55, '');
    fwrite($p56, '');
    fwrite($p57, '');
    fwrite($p58, '');
    fwrite($p59, '');
    fwrite($p60, '');
    fwrite($p61, '');
    fwrite($p62, '');
    fwrite($p63, '');
    fwrite($p64, '');

    fwrite($i1, '');
    fwrite($i2, '');
    fwrite($i3, '');
    fwrite($i4, '');
    fwrite($i5, '');
    fwrite($i6, '');
    fwrite($i7, '');
    fwrite($i8, '');
    fwrite($i9, '');
    fwrite($i10, '');
    fwrite($i11, '');
    fwrite($i12, '');
    fwrite($i13, '');
    fwrite($i14, '');
    fwrite($i15, '');
    fwrite($i16, '');
    fwrite($i17, '');
    fwrite($i18, '');
    fwrite($i19, '');
    fwrite($i20, '');
    fwrite($i21, '');
    fwrite($i22, '');
    fwrite($i23, '');
    fwrite($i24, '');
    fwrite($i25, '');
    fwrite($i26, '');
    fwrite($i27, '');
    fwrite($i28, '');
    fwrite($i29, '');
    fwrite($i30, '');
    fwrite($i31, '');
    fwrite($i32, '');
    fwrite($i33, '');
    fwrite($i34, '');
    fwrite($i35, '');
    fwrite($i36, '');
    fwrite($i37, '');
    fwrite($i38, '');
    fwrite($i39, '');
    fwrite($i40, '');
    fwrite($i41, '');
    fwrite($i42, '');
    fwrite($i43, '');
    fwrite($i44, '');
    fwrite($i45, '');
    fwrite($i46, '');
    fwrite($i47, '');
    fwrite($i48, '');
    fwrite($i49, '');
    fwrite($i50, '');
    fwrite($i51, '');
    fwrite($i52, '');
    fwrite($i53, '');
    fwrite($i54, '');
    fwrite($i55, '');
    fwrite($i56, '');
    fwrite($i57, '');
    fwrite($i58, '');
    fwrite($i59, '');
    fwrite($i60, '');
    fwrite($i61, '');
    fwrite($i62, '');
    fwrite($i63, '');
    fwrite($i64, '');
    echo '<br>';

    fclose($c1);
    fclose($c2);
    fclose($c3);
    fclose($c4);
    fclose($c5);
    fclose($c6);
    fclose($c7);
    fclose($c8);
    fclose($c9);
    fclose($c10);
    fclose($c11);
    fclose($c12);
    fclose($c13);
    fclose($c14);
    fclose($c15);
    fclose($c16);
    fclose($c17);
    fclose($c18);
    fclose($c19);
    fclose($c20);
    fclose($c21);
    fclose($c22);
    fclose($c23);
    fclose($c24);
    fclose($c25);
    fclose($c26);
    fclose($c27);
    fclose($c28);
    fclose($c29);
    fclose($c30);
    fclose($c31);
    fclose($c32);
    fclose($c33);
    fclose($c34);
    fclose($c35);
    fclose($c36);
    fclose($c37);
    fclose($c38);
    fclose($c39);
    fclose($c40);
    fclose($c41);
    fclose($c42);
    fclose($c43);
    fclose($c44);
    fclose($c45);
    fclose($c46);
    fclose($c47);
    fclose($c48);
    fclose($c49);
    fclose($c50);
    fclose($c51);
    fclose($c52);
    fclose($c53);
    fclose($c54);
    fclose($c55);
    fclose($c56);
    fclose($c57);
    fclose($c58);
    fclose($c59);
    fclose($c60);
    fclose($c61);
    fclose($c62);
    fclose($c63);
    fclose($c64);

    fclose($p1);
    fclose($p2);
    fclose($p3);
    fclose($p4);
    fclose($p5);
    fclose($p6);
    fclose($p7);
    fclose($p8);
    fclose($p9);
    fclose($p10);
    fclose($p11);
    fclose($p12);
    fclose($p13);
    fclose($p14);
    fclose($p15);
    fclose($p16);
    fclose($p17);
    fclose($p18);
    fclose($p19);
    fclose($p20);
    fclose($p21);
    fclose($p22);
    fclose($p23);
    fclose($p24);
    fclose($p25);
    fclose($p26);
    fclose($p27);
    fclose($p28);
    fclose($p29);
    fclose($p30);
    fclose($p31);
    fclose($p32);
    fclose($p33);
    fclose($p34);
    fclose($p35);
    fclose($p36);
    fclose($p37);
    fclose($p38);
    fclose($p39);
    fclose($p40);
    fclose($p41);
    fclose($p42);
    fclose($p43);
    fclose($p44);
    fclose($p45);
    fclose($p46);
    fclose($p47);
    fclose($p48);
    fclose($p49);
    fclose($p50);
    fclose($p51);
    fclose($p52);
    fclose($p53);
    fclose($p54);
    fclose($p55);
    fclose($p56);
    fclose($p57);
    fclose($p58);
    fclose($p59);
    fclose($p60);
    fclose($p61);
    fclose($p62);
    fclose($p63);
    fclose($p64);
    

    fclose($i1);
    fclose($i2);
    fclose($i3);
    fclose($i4);
    fclose($i5);
    fclose($i6);
    fclose($i7);
    fclose($i8);
    fclose($i9);
    fclose($i10);
    fclose($i11);
    fclose($i12);
    fclose($i13);
    fclose($i14);
    fclose($i15);
    fclose($i16);
    fclose($i17);
    fclose($i18);
    fclose($i19);
    fclose($i20);
    fclose($i21);
    fclose($i22);
    fclose($i23);
    fclose($i24);
    fclose($i25);
    fclose($i26);
    fclose($i27);
    fclose($i28);
    fclose($i29);
    fclose($i30);
    fclose($i31);
    fclose($i32);
    fclose($i33);
    fclose($i34);
    fclose($i35);
    fclose($i36);
    fclose($i37);
    fclose($i38);
    fclose($i39);
    fclose($i40);
    fclose($i41);
    fclose($i42);
    fclose($i43);
    fclose($i44);
    fclose($i45);
    fclose($i46);
    fclose($i47);
    fclose($i48);
    fclose($i49);
    fclose($i50);
    fclose($i51);
    fclose($i52);
    fclose($i53);
    fclose($i54);
    fclose($i55);
    fclose($i56);
    fclose($i57);
    fclose($i58);
    fclose($i59);
    fclose($i60);
    fclose($i61);
    fclose($i62);
    fclose($i63);
    fclose($i64);
    
   header("location:index.php");
   }
?>