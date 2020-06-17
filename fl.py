import serial
ser = serial.Serial('/dev/ttyUSB0', 38400, timeout=1)
ser.write(b'^fl;')
response = ser.readline()
print (response)
ser.close()
