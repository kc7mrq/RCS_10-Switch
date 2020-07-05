import serial
ser = serial.Serial('/dev/ttyUSB0', 38400)
ser.write(b'^on0;')
ser.close()
