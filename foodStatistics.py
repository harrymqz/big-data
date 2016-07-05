import sys
from pyspark import SparkContext

sc = SparkContext(appName="Food analysis")

product_rdd = sc.textFile("/user/llagostera/SparkInputs/" + sys.argv[1] + ".txt")

good = product_rdd.flatMap(lambda line: line.split(" ")) \
        .filter(lambda word: "saporous"  in word or 
                             "sapid"     in word or
                             "tasteful"  in word or
                             "toothsome" in word or
                             "palatable" in word or
                             "yummy"     in word or
                             "savoury"   in word or
                             "savory"    in word or
                             "amazing"   in word or
                             "tasty"     in word or
                             "favourite" in word or
                             "health"    in word or
                             "good"      in word) \
        .map(lambda word: (word, 1))
 
bad = product_rdd.flatMap(lambda line: line.split(" ")) \
        .filter(lambda word: "awful"     in word or 
                             "disgust"   in word or
                             "bad"       in word or
                             "horrible"  in word or
                             "nasty"     in word or
                             "shit"      in word or
                             "vomitive"  in word or
                             "rotten"    in word or
                             "trash"     in word) \
        .map(lambda word: (word, 1))
    
    
reducedGood = good.reduceByKey(lambda a, b: a + b)
reducedBad  = bad.reduceByKey(lambda a, b: a + b)
    
reducedGood.saveAsTextFile("hdfs:///user/llagostera/SparkGood/" + sys.argv[1])
reducedBad.saveAsTextFile("hdfs:///user/llagostera/SparkBad/" + sys.argv[1])

