#!/usr/bin/env python
#turn Power On
import sys
import serial


port = serial.Serial('/dev/ttyUSB1', baudrate=9600, bytesize=8, parity=serial.PARITY_NONE, stopbits=1, timeout=5)
port.open
#this is the code sent to the projector.  Replace it for your model
port.write("\x50\x57\x52\x20\x4F\x4E\x0D")
received = port.read(8)
print received # newline is printed
port.close
