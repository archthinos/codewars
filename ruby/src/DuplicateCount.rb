def duplicate_count(text)
    numbers = []

    array = text.split("")
    array.map{|e|
        numbers << e.each_byte
    }
    #return numbers
    return numbers.select{|v| numbers.count(v) > 1}.uniq.count
end

puts duplicate_count("abcdeaB")