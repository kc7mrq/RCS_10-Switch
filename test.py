import serial
ser = serial.Serial('/dev/ttyUSB0', 9600, timeout=1)
ser.write(b'rv;')
response = ser.readline()
print (response)
ser.close()

