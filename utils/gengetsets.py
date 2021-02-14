import fileinput

def tocamel(string: str, split: str = "_"):
    words = string.split(split)
    ans = ""
    for w in words:
        ans+=w.capitalize()
    return ans

def main():
    raw_atts = []
    for line in fileinput.input():
        raw_atts.append(line.strip());
    
    attrs = []
    getters = []
    setters = []
    con_args = ""
    cons_conts = []

    tab="    "
    for att in raw_atts:
        attrs.append(f"private ${att};");
        
        attget = "function get{}() {{\n{} return $this->{}; \n}}".format(tocamel(att), tab, att)
        getters.append(attget)

        attset = "function set{}($new_{}) {{\n{} $this->{} = $new_{}; \n}}".format(tocamel(att), att, tab, att, att)
        setters.append(attset)

        if len(con_args) > 0: 
            con_args+=", "

        con_args+="$"+att

        cons_conts.append("$this->{} = ${};".format(att, att))


    
    for att in attrs:
        print(att);
    
    print();

    cons_sig = "function __construct({}){{\n".format(con_args)
    print(cons_sig)
    for i in cons_conts:
        print(tab+i)
    print("}")

    for gets in getters:
        print(gets);
        print()

    for sets in setters:
        print(sets)
        print()
        
    
    
main()