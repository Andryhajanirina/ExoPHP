#write your code here
def echo(word)
	return word
	# if var == "hello"
	# 	return "hello"
	# else
	# 	return "bye"
	# end
end

def shout(word)
	return word.upcase
end

def repeat(word, nb = 2)
	result1 = ("#{word} \"") * nb
	result2 = result1.gsub("\"#{word} ", "#{word} ")
	result = result2.gsub("#{word} \"", "#{word}")
	return result
end

# Retourne la première lettre d'un mot suivi de nombre de caractère précisé dans le paramètre
def start_of_word(word, nb=0)
	new_word = []
	for i in 1..nb
		new_word << word[(i-1)]
	end
	return new_word.join
end

def first_word(word)
	result = word.split(" ")
	return result[0]
end

def titleize(word)
	my_array = word.split(" ")
	new_array = []
	my_array.each do |item|
		new_array << item.capitalize
	end
	return new_array.join(" ")
end
puts titleize("the bridge over the river kwai")
  # describe "titleize" do
  #   it "capitalizes a word" do
  #     expect(titleize("jaws")).to eq("Jaws")
  #   end

  #   it "capitalizes every word (aka title case)" do
  #     expect(titleize("david copperfield")).to eq("David Copperfield")
  #   end

  #   it "doesn't capitalize 'little words' in a title" do
  #     expect(titleize("war and peace")).to eq("War and Peace")
  #   end

  #   it "does capitalize 'little words' at the start of a title" do
  #     expect(titleize("the bridge over the river kwai")).to eq("The Bridge Over the River Kwai")
  #   end
  # end