#!/xampp/perl/bin/perl

$datafile='./data2.txt';

open(FH,">$datafile");

print FH "a test";
close(FH);
1;