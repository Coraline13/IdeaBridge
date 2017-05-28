package com.example.arin.ideabridgetwo;

import android.app.Activity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;
import android.widget.ImageView;

import com.squareup.picasso.Picasso;

public class CustomListIdea extends ArrayAdapter<String> {

    private final Activity context;
    private final String[] web;
    private final String[] imageURL;
    public CustomListIdea(Activity context,
                      String[] web, String[] imageURL) {
        super(context, R.layout.idea_layout2, web);
        this.context = context;
        this.web = web;
        this.imageURL = imageURL;

    }
    @Override
    public View getView(int position,View view,ViewGroup parent) {
        LayoutInflater inflater=context.getLayoutInflater();
        View rowView=inflater.inflate(R.layout.idea_layout2, null,true);

        TextView txtTitle = (TextView) rowView.findViewById(R.id.textView2);
        ImageView imageView = (ImageView) rowView.findViewById(R.id.imageView2);
        //TextView extratxt = (TextView) rowView.findViewById(R.id.textView1);

        txtTitle.setText(web[position]);
        Picasso.with(this.getContext())
                .load(imageURL[position])
                .into(imageView);
        //extratxt.setText("Description "+itemname[position]);
        return rowView;

    };
}