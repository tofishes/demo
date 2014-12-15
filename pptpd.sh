yum remove -y pptpd ppp
/etc/init.d/iptables stop
rm -rf /etc/pptpd.conf
rm -rf /etc/ppp
depmod -a
service iptables start
iptables -F
iptables --flush POSTROUTING --table nat
iptables --flush FORWARD

wget http://myvps-scripts.googlecode.com/files/dkms-2.0.17.5-1.noarch.rpm
wget http://myvps-scripts.googlecode.com/files/pptpd-1.3.4-1.rhel5.1.i386.rpm
wget http://myvps-scripts.googlecode.com/files/ppp-2.4.4-9.0.rhel5.i386.rpm

yum -y install make libpcap iptables gcc-c++ logrotate tar cpio perl pam tcp_wrappers
rpm -ivh dkms-2.0.17.5-1.noarch.rpm
#rpm -ivh kernel_ppp_mppe-1.0.2-3dkms.noarch.rpm
#rpm -qa kernel_ppp_mppe
rpm -Uvh ppp-2.4.4-9.0.rhel5.i386.rpm
rpm -ivh pptpd-1.3.4-1.rhel5.1.i386.rpm

modprobe ppp_mppe

mknod /dev/ppp c 108 0 
echo 1 > /proc/sys/net/ipv4/ip_forward 
echo "mknod /dev/ppp c 108 0" >> /etc/rc.local
echo "echo 1 > /proc/sys/net/ipv4/ip_forward" >> /etc/rc.local
echo "localip 172.16.36.1" >> /etc/pptpd.conf
echo "remoteip 172.16.36.2-254" >> /etc/pptpd.conf
echo "ms-dns 8.8.8.8" >> /etc/ppp/options.pptpd
echo "ms-dns 8.8.4.4" >> /etc/ppp/options.pptpd

pass=`openssl rand 6 -base64`
if [ "$1" != "" ]
then pass=$1
fi

ip=`/sbin/ifconfig eth0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'`

echo "vpn pptpd ${pass} *" >> /etc/ppp/chap-secrets

iptables -t nat -A POSTROUTING -s 172.16.36.0/24 -j SNAT --to-source `ifconfig  | grep 'inet addr:'| grep -v '127.0.0.1' | cut -d: -f2 | awk 'NR==1 { print $1}'`
iptables -A FORWARD -p tcp --syn -s 172.16.36.0/24 -j TCPMSS --set-mss 1356
service iptables save

chkconfig iptables on
chkconfig pptpd on

service iptables start
service pptpd start


echo "==============================================================================="
echo " VPN INSTALLATION COMPLETE"
echo "==============================================================================="
echo " "
echo "VPN hostname/ip: ${ip}"
echo "VPN type: PPTP"
echo "VPN username: vpn"
echo "VPN password: ${pass}"
echo " "
echo " "
echo "Note: You may need to ensure the checkbox send all traffic over this connection"
echo "the codes edit by http://www.laozuo.org/"
echo " "

rm -rf *.rpm
