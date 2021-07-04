set ns [new Simulator]

set tf [open lab4.tr w]
$ns trace-all $tf

set nf [open lab4.nam w]
$ns namtrace-all $nf

set n0 [$ns node]
set n1 [$ns node]

$ns color 1 "red"

$n0 label "Sender"
$n1 label "Receiver"

$ns duplex-link $n0 $n1 0.2Mb 200ms DropTail
$ns duplex-link-op $n0 $n1 orient right
$ns queue-limit $n0 $n1 10

Agent/TCP set nam_tracevar_ true
set tcp [new Agent/TCP]
$tcp set window_ 1
$tcp set maxcwnd_ 1
$ns attach-agent $n0 $tcp

set ftp [new Application/FTP]
$ftp attach-agent $tcp

set sink [new Agent/TCPSink]
$ns attach-agent $n1 $sink

$ns connect $tcp $sink

$ns add-agent-trace $tcp tcp
$ns monitor-agent-trace  $tcp
$tcp set tracevar_ cwnd_
$tcp set class_ 1

$ns at 0.1 "$ftp start"
$ns at 3.0 "$ns detach-agent $n0 $tcp; $ns detach-agent $n1 $sink"
$ns at 3.5 "finish"

$ns at 0.0  "$ns trace-annotate \"Stop and Wait with normal operation\""
$ns at 0.05 "$ns trace-annotate \"FTP starts at 0.1\""
$ns at 0.33 "$ns trace-annotate \"Send Packet_0\""
$ns at 0.56 "$ns trace-annotate \"Receive Ack_ 0\""
$ns at 0.72 "$ns trace-annotate \"send packet_1\""
$ns at 0.94 "$ns trace-annotate \"Receive Ack_ 1\""
$ns at 1.15 "$ns trace-annotate \"send packet_2\""
$ns at 1.34 "$ns trace-annotate \"Receive Ack_ 2\""
$ns at 1.56 "$ns trace-annotate \"send packet_3\""
$ns at 1.77 "$ns trace-annotate \"Receive Ack_ 3\""
$ns at 1.91 "$ns trace-annotate \"send packet_4\""
$ns at 2.11 "$ns trace-annotate \"Receive Ack_ 4\""
$ns at 2.35 "$ns trace-annotate \"send packet_5\""
$ns at 2.55 "$ns trace-annotate \"Receive Ack_ 5\""
$ns at 2.78 "$ns trace-annotate \"send packet_6\""
$ns at 2.99 "$ns trace-annotate \"Receive Ack_ 6\""
$ns at 3.1  "$ns trace-annotate \"FTP stops\""

proc finish {} {
global ns nf tf
$ns flush-trace
puts "running nam...."
exec nam lab4.nam &
close $nf
exit 0
}

$ns run





















