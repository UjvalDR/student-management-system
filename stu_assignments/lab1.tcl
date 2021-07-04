set ns  [new Simulator] 
set tf  [open lab1.tr w] 
$ns trace-all $tf 

set nf  [open lab1.nam w] 
$ns namtrace-all $nf 

# The below code is used to create the nodes. 
set n0  [$ns node] 
set n1  [$ns node] 
set n2  [$ns node]
 
#This is used to give color to the flow of packets.
 
$ns color 1 "red" 
$ns color 2 "blue" 
$n0 label "Source/udp0" 
$n1 label "Source/udp1" 
$n2 label "Destination" 

#providing the link 

$ns duplex-link $n0 $n2 10Mb 100ms DropTail 
$ns duplex-link $n1 $n2 10Mb 10ms DropTail
 
# set the queue size b/w the nodes 
$ns set queue-limit $n0 $n2  5 
$ns set queue-limit $n1 $n2  5 
set udp0  [new Agent/UDP] 
set udp1 [new Agent/UDP] 
$ns attach-agent $n0 $udp0 
$ns attach-agent $n1 $udp1
 
set cbr0  [new Application/Traffic/CBR] 
set cbr1  [new Application/Traffic/CBR] 

$cbr0 attach-agent $udp0 
$cbr1 attach-agent $udp1 

set null0  [new Agent/Null] 
$ns attach-agent $n2 $null0 

#The below code sets the udp0 packets to red and udp1 packets to blue color 
$udp0 set class_ 1 
$udp1 set class_ 2 

#The below code is used to connect the agents. 
$ns connect $udp0 $null0 
$ns connect $udp1 $null0 

#The below code is used to set the packet size to 500 
$cbr0 set packetSize_ 500Mb 
$cbr1 set packetSize_ 500Mb 

#The below code is used to set the interval of the packets, 
$cbr0 set interval_ 0.01 $cbr1 set interval_ 0.01 

proc finish {} {
global  ns nf  tf 
$ns flush-trace 
exec nam lab1.nam & 
close $tf 
close $nf 
exit 0 
} 
$ns at 0.1 "$cbr0 start" 
$ns at 0.1 "$cbr1 start" 

$ns at 9.5 "$cbr0 stop" 
$ns at 10.0 "$cbr1 stop" 
$ns at 10.0 "finish" 
$ns run 

