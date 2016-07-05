import json

def langFilter(data, language) :

    productTextArr = []
    auxArr = []

    for product in data:
        productTextArr.append( [product["searched_word"], ""] )
        for key, value in product["tweets"].items() :
            if value["lang"] == language :
                auxArr = productTextArr[-1]
                productTextArr[-1] = [auxArr[0], auxArr[-1] + value["text"] + " "]

    return productTextArr

#Example input
#data = [{"n_tweets": 44,"searched_word": "Greek+style+yoghurt","tweets": { "748260041963245569": {"text": "@asda @LancashireFarm why have Asda Sefton Park stopped selling Lancashire Farm Greek style yoghurt?","created": "Wed Jun 29 21:01:10 +0000 2016","lang": "en","location": "Liverpool","hashtags": ""}, "745195072577208320": {"text": "#2: De Cecco 141 Mezze Penne Gr.500 https:\/\/t.co\/O3sasMmImd https:\/\/t.co\/NYZF4df4Ar","created": "Tue Jun 21 10:02:05 +0000 2016","lang": "it","location": "Italia","hashtags": ""}}}]

lang = str(input("Specify the language:"))

with open('InputFiles/Refined_output-0001.json', 'r', encoding='utf8') as data_file:
    #Decoded: Transform json input to python objects
    decoded = json.load(data_file)



for product in langFilter(decoded, "en") :
    result = open("OutputFiles/Heavy/"+product[0]+".txt", "w", encoding='utf8')
    result.write( product[-1] )


data_file.close()
result.close()
