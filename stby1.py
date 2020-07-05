import serial
ser = serial.Serial('/dev/ttyUSB0', 38400, timeout=1)
ser.write(b'^os1;')
response = ser.readline()
print (response)
ser.close()

