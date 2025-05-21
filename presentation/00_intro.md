# Object oriented programming

In this course we will learn object-oriented programming using PHP, as well as learn some features of PHP that will help you implement object-oriented more powerful.

## Programming paradigms

Object-oriented programming is a programming paradigm. Other programming paradigms would be, for example, functional programming, procedural programming, logical programming amongst many.

A programming language is not fixed to a paradigm. A paradigm is a general approach on how to solve problems programmatically. PHP, for example, can be implemented in an object-oriented way, it can be implemented procedurally, but it can't be implemented in a logical paradigm fashion.

Different paradigms are best suited for different use cases: functional programming (e.g., with Haskell) is often used for data-intensive calculations and mathematical operations, procedural programming (e.g., with C) for classic step-by-step processes, and object-oriented programming (e.g., with Java or PHP) for complex, structured applications with many objects and relationships.
### Logical programming
Logical programming (e.g., with Prolog) is often used when problems are solved by defining facts and rules, and solutions are found through logical inference. Typical use cases include expert systems and natural language processing. Unlike object-oriented, procedural, or functional paradigms, logical programming focuses on describing what is true rather than specifying step-by-step instructions.

### Declarative programming

Declarative programming is another paradigm, where you describe what result you want rather than how to achieve it step by step. SQL is a well-known example of a declarative language: you specify which data you want to retrieve or manipulate, and the database system figures out how to perform the operation. Declarative programming is especially useful for tasks like querying databases or defining configurations, where the focus is on the desired outcome rather than the process.
## Execution model

The execution model of a programming language describes how source code is transformed into executable instructions and run by a computer. The two main execution models are compiled and interpreted. In a compiled language, the source code is translated into machine code by a compiler before execution, resulting in a standalone executable. In an interpreted language, the source code is read and executed line by line by an interpreter at runtime, without producing a separate executable file.

Unlike programming paradigms, which are general approaches to problem-solving and can often be chosen by the developer, the execution model is determined by the programming language itself. This means that the way code is executed—whether compiled, interpreted, or using a hybrid approach—is defined by the language's design and implementation, not by the programmer's preference.

PHP uses an interpreted execution model. When a PHP script is run, the PHP interpreter reads the code and executes it directly on the server. This allows for rapid development and easy testing, as changes to the code can be executed immediately without a separate compilation step. However, modern PHP engines may also use techniques like bytecode compilation or Just-in-Time (JIT) compilation to improve performance.

## Libraries

Most programming languages come with a set of standard libraries that provide essential functionality, such as working with files, handling dates, or performing mathematical operations. These libraries are usually included with the language installation and are available out of the box. For example, Java has a very extensive standard library that covers a wide range of tasks, while some other languages offer only a minimal set of built-in libraries, requiring developers to rely more on external packages.

In addition to standard libraries, PHP offers a variety of extensions that can be enabled or installed to add specific features, such as working with databases, image processing, or encryption. These extensions are often written in C and provide efficient, low-level access to additional functionality. While PHP extensions are separate from packages that you might install via a package manager like Composer, they can be essential for certain projects. Packages and how to use them will be discussed in a later chapter.

## History

PHP was created in the mid-1990s by Rasmus Lerdorf, who initially developed a set of CGI scripts in C to manage his personal website. These scripts gradually evolved into a server-side scripting language designed specifically for web development. Over time, PHP gained popularity due to its simplicity and effectiveness for building dynamic web pages.

Behind the scenes, the PHP interpreter itself is written in C. This allows PHP to execute scripts efficiently and interface closely with the underlying system. However, as a PHP developer, you only need to work with PHP’s straightforward and easy-to-learn syntax. There is no need to learn or use C in order to build professional web applications with PHP.

Today, PHP is one of the most widely used server-side programming languages on the web. According to recent statistics, PHP is used by about 97% of all server-side web applications. This means that a large portion of the world’s websites—including many well-known content management systems like WordPress—are based on PHP. This widespread adoption makes PHP a highly relevant and practical language for web development.