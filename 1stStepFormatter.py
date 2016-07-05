

input_File = open('info.txt')
output_File = open('formattedInfo.txt', '+w')

data = input_File.read()
data = data.replace("{", "")
data = data.replace( '"product_name"', "")
data = data.replace( ":", "")
data = data.replace("}", ",")


output_File.write('{"product_name" : [ ')
output_File.write(data)

output_File.seek(0,2)
size = output_File.tell()
output_File.truncate(size-1)

output_File.write("]}")
